% First year project "The Double Pendulum"
% Authors:
% Christian Schioett - BCN852
% Rasmus Nielsen - JBZ701
% Thue Nikolajsen - QRD689
% Date 18/03 2016

%% This is the beginning of the program %%
close all; clear all; clc;

%%  Variables get set %%
g = 9.82;       % local gravity constant
dt = 0.01;      % time step size

m = [800 600]*10^-3;        % Masses of pendulum rods
R = [35.6 33.9]*10^-2;      % Lengths of pendulum rods
L = [16.02 7.01]*10^-2;     % Length to COM of rods

% m = [1 1];
% R = [2 2];
% L = R/2;
% I(1) = 1/12 * m(1) * R(1)^2;
% I(2) = 1/12 * m(2) * R(2)^2;

% Periodes for small oscillations of each rod
% with pivot points at the end of the rods
P = [1.5068 1.3951]; 

% Moment of inertia for pendulum 1
I(1) = ( P(1)^2 * g/(4*pi^2) - L(1) ) * m(1) * L(1);

% Moment of inertia for pendulum 2
I(2) = ( P(2)^2 * g/(4*pi^2) - L(2) ) * m(2) * L(2);

% state-vector [angle 1, angle 2, angular velocity 1, angular velocity 2]
S = [pi/4, pi/4, 0, 0];

% Constants important for computations
k(1) = m(1)*L(1)^2 + m(2)*R(1)^2 + I(1);
k(2) = m(2)*L(2)^2 + I(2);
k(3) = m(2)*R(1)*L(2);
k(4) = g*m(1)*L(1) + g*m(2)*R(1);
k(5) = g*m(2)*L(2);

% Conversion to Cartesian coordinates
x(1) = sin(S(1))*R(1);
y(1) = -cos(S(1))*R(1);
x(2) = x(1) + sin(S(2))*R(2);
y(2) = y(1) - cos(S(2))*R(2);

%% Setting up window %%
h = figure; set(gca,'Color','black'); set(gca,'fontsize',10);
hold on; grid on; set(gcf,'Position',[0 0 650 550])
xlim([-1; 1]); ylim([-1; 1]);
t = title('Simulation of chaotic pendulums'); t.FontSize = 16;
lx = xlabel('x / [m]'); ly = ylabel('y / [m]');
lx.FontSize = 12; ly.FontSize = 12;

% Equations of motion (and related functions)
D = @(X) ( k(1)*k(2) - k(3)^2 * cos(X(2)-X(1))^2 );
f{1} = @(X) ( X(3)*k(2) - X(4)*k(3)*cos(X(2)-X(1)) ) / D(X);
f{2} = @(X) ( X(4)*k(1) - X(3)*k(3)*cos(X(2)-X(1)) ) / D(X);
f{3} = @(X) k(3)*sin(X(2)-X(1))*f{1}(X)*f{2}(X) - k(4)*sin(X(1));
f{4} = @(X) -k(3)*sin(X(2)-X(1))*f{1}(X)*f{2}(X) - k(5)*sin(X(2));

% Variables to track path of tip of second pendulum are set
X = []; Y = [];

%% The simulation is set to begin at 0 time %%
T = 0;

while ishandle(h)
    
    % Start of Runge Kutta integration
    for i = 1:4
        a(i) = f{i}(S);
    end
    for i = 1:4
        b(i) = f{i}(S + dt/2*a);
    end
    for i = 1:4
        c(i) = f{i}(S + dt/2*b);
    end
    for i = 1:4
        d(i) = f{i}(S + dt*c);
    end
    
    S = S + dt/6 * (a + 2*b + 2*c + d);
    % End of Runge Kutta integration
    
    % Conversion to Cartesian coordinates
    x(1) = sin(S(1))*R(1);
    y(1) = -cos(S(1))*R(1);
    x(2) = x(1) + sin(S(2))*R(2);
    y(2) = y(1) - cos(S(2))*R(2);
    
    % Tracks the motion of the tip of the second pendulum
    X(length(X)+1) = x(2); Y(length(Y)+1) = y(2);
    
    % If the window is open, update graphics
    if ishandle(h)
        cla;                                            % Clear screen
        plot(X, Y, 'r-')                                % Plot path
        line([0 x(1)], [0 y(1)], 'LineWidth', 3)        % Draw pendulum 1
        line([x(1) x(2)], [y(1) y(2)], 'LineWidth', 3)  % Draw pendulum 2
    end
    drawnow;
    
    % Update time the simulation has been running
    T = T + dt;
    
end

%% End of script %%
disp('Program executed');