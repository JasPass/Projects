%% Computer exercises: KVM1 %%

% Script to simulate Gaussian potential
% Coded by Rasmus Nielsen and Christain Schioett: JBZ701, BCN852
% Coding initiated on: 3/1 2017

%% Initialize program and set variables %%
close all; clc;

% Import the simulation core file
import Core;

% Number of points in space (-1)
N = 1000;

% Half the length of space
L = 20;

% Initialize simulation object
% Automaticly generate space position vector
sim = Core(N, L);

% Set kinetic energy matrix, T
% Argument makes space periodic if true
sim = sim.kinetic(false);

%% Question 3.1 %%

% Set the layoyt for 1st plot
h1 = figure; grid on; hold on;
set(gca,'fontsize',12);
set(gcf,'Position',[0 0 650 550]);
xlim([-20, 20]); ylim([-2, 15]);
t = title('Gaussian potential');
t.FontSize = 24;
lx = xlabel('Position');
ly = ylabel('');
lx.FontSize = 16;
ly.FontSize = 16;

% Set potential energy matrix, V
% First argument is strength of potential
% Second argument is type of potential
sim = sim.potential(10, 'heaviside(x)');

% Set the Hamiltonian matrix, H
% and find its eigenvectors and eigenvalues
sim = sim.hamilton();

% Plot the potential
plot(sim.X, diag(sim.V));

% Plot the first 4 eigenstates
for i = 1 : 4
    
    plot(sim.X, sim.E(i) + sim.psi_E(:,i));

end
% % % % 
% % % % % Plot some of the higher eigenstates
% % % % plot(sim.X, sim.E(20) + sim.psi_E(:,20));
% % % % plot(sim.X, sim.E(30) + sim.psi_E(:,30));
% % % % plot(sim.X, sim.E(40) + sim.psi_E(:,40));
% % % % 
% % % % %% Question 3.2 %%
% % % % 
% % % % % Set the layoyt for 2nd plot
% % % % h2 = figure; grid on; hold on;
% % % % set(gca,'fontsize',12);
% % % % set(gcf,'Position',[0 0 650 550]);
% % % % xlim([0, 11]); ylim([-8.2, 2.2]);
% % % % t = title('Gaussian potential');
% % % % t.FontSize = 24;
% % % % lx = xlabel('Potential strength V_0');
% % % % ly = ylabel('');
% % % % lx.FontSize = 16;
% % % % ly.FontSize = 16;
% % % % 
% % % % % Preallocate memory for ground state energy vector 
% % % % E_0 = zeros(100, 1);
% % % % 
% % % % % Preallocate memory for ground state energy vector 
% % % % E_1 = zeros(100, 1);
% % % % 
% % % % % Preallocate memory for zero-point energy vector 
% % % % zero_point = zeros(100, 1);
% % % % 
% % % % % Preallocate memory for number of bound states vector 
% % % % N_bound = zeros(100, 1);
% % % % 
% % % % for i = 1 : 100
% % % %     
% % % %     % Set potential energy matrix, V
% % % %     % First argument is strength of potential
% % % %     % Second argument is type of potential
% % % %     sim = sim.potential(i, 'gaussian');
% % % % 
% % % %     % Set the Hamiltonian matrix, H
% % % %     % and find its eigenvectors and eigenvalues
% % % %     sim = sim.hamilton();
% % % %     
% % % %     % Add to energy of ground state vector
% % % %     E_0(i) = sim.E(1);
% % % %     
% % % %     % Add to energy of ground state vector
% % % %     E_1(i) = sim.E(2);
% % % %     
% % % %     % Number of bound states
% % % %     N_bound(i) = sum(sim.E < 0);
% % % %     
% % % %     % Add to zero-point energy vector
% % % %     zero_point(i) = i + sim.E(1);
% % % %     
% % % % end
% % % % 
% % % % % V0 vector
% % % % V0 = (1 : 100)';
% % % % 
% % % % % Plot energy of ground state
% % % % plot(V0(1 : 10), E_0(1 : 10), 'bo');
% % % % 
% % % % % Plot zero point energy
% % % % plot(V0(1 : 10), zero_point(1 : 10), 'ro');
% % % % 
% % % % % Set a legend
% % % % l = legend('Ground state energy', 'Zero-point energy');
% % % % l.FontSize = 16;
% % % % 
% % % % %% Question 3.3 %%
% % % % 
% % % % % Set the layoyt for 3rd plot
% % % % h3 = figure; grid on; hold on;
% % % % set(gca,'fontsize',12);
% % % % set(gcf,'Position',[0 0 650 550]);
% % % % xlim([0, 101]); ylim([0, 14]);
% % % % t = title('Gaussian potential');
% % % % t.FontSize = 24;
% % % % 
% % % % % Difference vector
% % % % diff = E_1 - E_0;
% % % % 
% % % % % Plot difference between energy of the ground
% % % % % state, and energy of the 1st excited state
% % % % plot(V0, diff, 'b.');
% % % % 
% % % % % Fit (V0, E_1-E_2) data to square root function
% % % % fit_E0E1 = fit(V0, diff, 'a*x^(1/2) - b', 'StartPoint', [0, 0]);
% % % % 
% % % % % Plot the fit
% % % % plot(fit_E0E1)
% % % % 
% % % % % Set labels and legend
% % % % lx = xlabel('Potential strength V_0');
% % % % ly = ylabel('E_1 - E_0');
% % % % lx.FontSize = 16;
% % % % ly.FontSize = 16;
% % % % l = legend('Simulated data', 'Fitted Curve');
% % % % l.FontSize = 16;
% % % % 
% % % % %% Question 3.4 %%
% % % % 
% % % % % Set the layoyt for 4rd plot
% % % % h4 = figure; grid on; hold on;
% % % % set(gca,'fontsize',12);
% % % % set(gcf,'Position',[0 0 650 550]);
% % % % xlim([0, 101]); ylim([0, 12]);
% % % % t = title('Gaussian potential');
% % % % t.FontSize = 24;
% % % % 
% % % % % Plot number of bound states
% % % % plot(V0, N_bound, 'b-')
% % % % 
% % % % % Fit (V0, N_bound) data to square root function
% % % % fit_bound = fit(V0, N_bound, 'a*x^(1/2)', 'StartPoint', 0);
% % % % 
% % % % % Chi_square
% % % % exp = fit_bound.a * sqrt(V0);
% % % % chi2 = sum( (exp - N_bound).^2 ) / (100 - 1);
% % % % 
% % % % % Plot the fit
% % % % plot(fit_bound)
% % % % 
% % % % % Set labels and legend
% % % % lx = xlabel('Potential strength V_0');
% % % % ly = ylabel('Number of bound states');
% % % % lx.FontSize = 16;
% % % % ly.FontSize = 16;
% % % % l = legend('Simulated data', 'Fitted Curve');
% % % % l.FontSize = 16;
% % % % 
% % % % %% Question 3.6 %%
% % % % 
% % % % % Real strength of potential
% % % % V0_r = 1.60217662e-19;          % In units of [J]
% % % % 
% % % % % Width of potential
% % % % sigma = 1e-9;                   % In units of [m]
% % % % 
% % % % % Mass of electron
% % % % m_e = 9.10938356e-31;           % In units of [kg]
% % % % 
% % % % % Planck's constants
% % % % h = 6.62607004e-34;             % In units of [J s]
% % % % hbar = h / (2 * pi);            % In units of [J s]
% % % % 
% % % % % Speed of light
% % % % c = 2.99792458e8;               % In units of [m / s]
% % % % 
% % % % % Compute the characteristic energy
% % % % E0 = hbar^2 / (m_e * sigma^2);
% % % % 
% % % % % Compute the dimensionless potential strength
% % % % V0 = V0_r / E0;
% % % % 
% % % % % Set potential energy matrix, V
% % % % % First argument is strength of potential
% % % % % Second argument is type of potential
% % % % sim = sim.potential(V0, 'gaussian');
% % % % 
% % % % % Set the Hamiltonian matrix, H
% % % % % and find its eigenvectors and eigenvalues
% % % % sim = sim.hamilton();
% % % % 
% % % % % Calculate energy difference between
% % % % % ground state and 1st excited state
% % % % diff = sim.E(2) - sim.E(1);
% % % % 
% % % % % Convert diff to real units
% % % % diff_r = diff * E0;
% % % % 
% % % % % Compute the wavelength of emitted photon
% % % % lambda = (c * h / diff_r) * 10^9;   % In units of [nm]
% % % % 
% % % % % Display the computed wavelength of emitted photon
% % % % C = {'Wavelength of emitted photon:', num2str(lambda, '%10.3e'), 'nm'};
% % % % disp( strjoin(C) );

%% End of script %%
disp('Program executed');