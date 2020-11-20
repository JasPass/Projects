%% Computer exercises: KVM1 %%

% Script to simulate the time evolution of wavefunctions
% Coded by Rasmus Nielsen: JBZ701

%% Initialize program and set variables %%
close all; clc;

% Import the simulation core file
import Core;

% Number of points in space (-1)
N = 2000;

% Half the length of space
L = 20;

% Initialize simulation object
% Automaticly generate space position vector
sim = Core(N, L);

% Set kinetic energy matrix, T
% Argument makes space periodic if true
sim = sim.kinetic(true);

% Set potential energy matrix, V
% First argument is strength of potential
% Second argument is type of potential
sim = sim.potential(75, 'double-well');

% Set the Hamiltonian matrix, H
% and find its eigenvectors and eigenvalues
sim = sim.hamilton();

% Set initial wavefunction (gaussian wave-packet)
Psi0 = 0.25 * exp(10i * (sim.X + 5) - 0.5 * (sim.X + 5).^2) / sqrt(0.1108);
% Psi0 = sim.psi_E(:,1);

%% Set up window for time evolution %%

% Set the layoyt
h = figure; grid on; hold on;
set(gca,'fontsize',12);
set(gcf,'Position',[0 0 1200 600]);
t = title('Simulation of Wave Function in Potential');
t.FontSize = 24;
lx = xlabel('x');
ly = ylabel('Re[\Psi]');
lx.FontSize = 16;
ly.FontSize = 16;
xlim([-L, L]);
ylim([-1.6, 1.6]);

% Plot potential
plot(sim.X, diag(sim.V)-min(diag(sim.V)), 'r-');

% Plot initial wave function
p = plot(sim.X, real(Psi0), 'b-');

% Plot initial probability
q = plot(sim.X, Psi0.*conj(Psi0) - 1.5, 'g-');

% Set a legend
l = legend('Potential', 'Wave Function', 'Probability Density');
l.FontSize = 16;

%% Initialize and run time evolution loop %%

% Set time at simulation start
t = 0;

% Time step size
dt = 0.01;

% Find the expansion of Psi0 in the psi_E basis
a0 = sim.psi_E \ Psi0;

% Simulation loop (runs until window is closed)
while ishandle(h)
    
    % Update Psi0
    Psi = sim.update(a0, t);
    
    % Update graphics
    set(p,'XData', sim.X,'YData', real(Psi));
    set(q,'XData', sim.X,'YData', Psi.*conj(Psi) - 1.5);
    drawnow;
    
    % Count up the time
    t = t + dt;
    
end

%% End of script %%
disp('Program executed');