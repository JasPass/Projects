% Written by Rasmus Steen Kofoed Nielsen, JBZ701
% Planet-data taken from: http://nssdc.gsfc.nasa.gov/planetary/factsheet/

%% Initializing program %%
close all; clear all; clc;

G = 6.674 * 10^(-11);           % Gravitational constant: [N * m^2 / kg^2]
N = 4;                          % Number of planets
dt = 60*60*24/3;                % Timestep-size: [s]
trace = 0;                      % Planet orbits gets drawn, if 1 

%% Setting up window %%
h = figure; set(gca,'Color','black'); set(gca,'fontsize',10);
hold on; grid on; set(gcf,'Position',[0 0 650 550])
xlim([-200*10^9; 200*10^9]); ylim([-170*10^9; 200*10^9]);
t = title('Simulation of planetary orbits'); t.FontSize = 16;
lx = xlabel('x / [m]'); ly = ylabel('y / [m]');
lx.FontSize = 12; ly.FontSize = 12;

%% Setting up info-box %%
dims = [0.145, 0.8, 0.1, 0.1];
box = annotation('textbox', dims,'FitBoxToText', 'on');
box.FontSize = 12; box.Color = 'white'; box.EdgeColor = 'white';

%% Making Sun data-structur %%
disp('Program executed');
p(1).mass = 2.0 * 10^30;        % Enhed: [kg]
p(1).pos = [0; 0];              % Enhed: [m]
p(1).vel = [0; 0];              % Enhed: [m/s]
p(1).force = [0; 0];            % Enhed: [N]
p(1).color = 'y.';
p(1).plot = plot(p(1).pos(1), p(1).pos(2), p(1).color);

%% Making Mercury data-structur %%
p(2).mass = 0.33 * 10^24;       % Enhed: [kg]
p(2).pos = [57.9; 0] * 10^9;    % Enhed: [m]
p(2).vel = [0; 47.4] * 10^3;    % Enhed: [m/s]
p(2).force = [0; 0];            % Enhed: [N]
p(2).color = 'm.';
p(2).plot = plot(p(2).pos(1), p(2).pos(2), p(2).color);

%% Making Venus data-structur %%
p(3).mass = 4.87 * 10^24;       % Enhed: [kg]
p(3).pos = [108.2; 0] * 10^9;   % Enhed: [m]
p(3).vel = [0; 35.0] * 10^3;    % Enhed: [m/s]
p(3).force = [0; 0];            % Enhed: [N]
p(3).color = 'r.';
p(3).plot = plot(p(3).pos(1), p(3).pos(2), p(3).color);

%% Making Earth data-structur %%
p(4).mass = 5.97 * 10^24;       % Enhed: [kg]
p(4).pos = [149.6; 0] * 10^9;   % Enhed: [m]
p(4).vel = [0; 29.8] * 10^3;    % Enhed: [m/s]
p(4).force = [0; 0];            % Enhed: [N]
p(4).color = 'g.';
p(4).plot = plot(p(4).pos(1), p(4).pos(2), p(4).color);

%% Setting up legend %%
l = legend('Sun','Mercury','Venus','Earth');
l.TextColor = 'white'; l.EdgeColor = 'white';
l.FontSize = 12;

T = 0;     % Variable for storing run-time: [days]

%% Run loop, if the window still exists %%
while ishandle(h)
    % Updates info-box text
    C = {'Time from start [days]: ',num2str(fix(T))};
    str = strjoin(C);
    box.String = str;
    
    % The total force on each planet, due to the gravity from all other
    % planets, gets calculated and stored
    for i = 1:N-1
        for j = i+1:N
            ds = p(i).pos-p(j).pos;     % Vector between particle i and j
            L = sqrt(dot(ds,ds));       % Distance between particle i and j
            p(i).force = p(i).force - G * p(i).mass*p(j).mass / (L^3) * ds;
            p(j).force = p(j).force + G * p(i).mass*p(j).mass / (L^3) * ds;
            % Updates the net-force on particle i and j using Newtons law
            % of gravitation. The new contributions are equal and opposite.
        end
    end
    % Updates positions and velocities of all particles
    for i = 1:N
        a = p(i).force / p(i).mass;
        p(i).vel = p(i).vel + a*dt;
        p(i).pos = p(i).pos + p(i).vel*dt;
        p(i).force = [0; 0];
        
        % The i-te particle gets drawn, if the window still exists
        if ishandle(h)
            if trace == 1
                x = [p(i).plot.XData, p(i).pos(1)];
                y = [p(i).plot.YData, p(i).pos(2)];
                set(p(i).plot, 'XData', x, 'YData', y)
            else
                set(p(i).plot, 'XData', p(i).pos(1), 'YData', p(i).pos(2))
            end
        end
    end
    drawnow;
    
    T = T + dt/(60*60*24);  % Add the number of [days] passed
end

%% End of script %%
disp('Program executed');