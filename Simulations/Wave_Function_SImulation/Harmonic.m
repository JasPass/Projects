%% Computer exercises: KVM1 %%

% Script to simulate harmonic oscillator potential
% Coded by Rasmus Nielsen and Christain Schioett: JBZ701, BCN852
% Coding initiated on: 14/12 2016

%% Initialize program and set variables %%
close all; clc;

% Import the simulation core file
import Core;

% Number of points in space (-1)
N = 1000;

% Half the length of space
L = 10;

% Initialize simulation object
% Automaticly generate space position vector
sim = Core(N, L);

% Set kinetic energy matrix, T
% Argument makes space periodic if true
sim = sim.kinetic(false);

% Set potential energy matrix, V
% First argument is strength of potential
% Second argument is type of potential
sim = sim.potential(1, 'harmonic');

% Set the Hamiltonian matrix, H
% and find its eigenvectors and eigenvalues
sim = sim.hamilton();

%% Set up window for simulation %%

% Set the layoyt
h = figure; hold on; grid on;
set(gca,'fontsize',12);
set(gcf,'Position',[0 0 650 550]);
xlim([0, 49]); ylim([0, 0.5]);
t = title('The Harmonic Oscillator');
t.FontSize = 24;
lx = xlabel('nth Eigenstate');
ly = ylabel('Probability');
lx.FontSize = 16;
ly.FontSize = 16;

%% Setup and run simulation %%

% % % First and Second Question -------------------------
% % Plot the potential
% plot(sim.X, diag(sim.V) + 30)
% 
% % Making plots of the first 5 eigenstates
% for i = 31 : 36
%     
%     plot(sim.X, sim.E(i) + sim.psi_E(:,i))
%     
% end


% % % Third Question ----------------------------------
% % We start by choosing how many (p_n) eigenstates we want to look at
% % and setups an empty vector for the max values (p_y)
% p_n = 50;
% p_y = zeros(p_n,1);
% p_x = 0:p_n - 1;
% 
% % When finding the maximum, we only look at the positive x half of the
% % eigenstates. This is fine because all eigenstates are either even or 
% % odd functions and when you square them you always get an even function.
% % This means that we will have two maximums - one with positive and one
% % with negative x. We choose to find the positive x always.
% for i=1:p_n
%     psi2_i = sim.psi_E(N/2 + 1:N + 1,i).^2;
%     x_i = sim.X(N/2 + 1:N + 1);
%     p_y(i) = x_i(psi2_i == max(psi2_i));
% end
% plot(p_x,p_y)


% % % Fourth Question -----------------------------------
% We start by choosing how many (p_n) eigenstates we want to look at
% and setups an empty vector for probabilities (p_y)
for X=3:2:7
    % We start by choosing how many (p_n) eigenstates we want to look at
    % and set up an empty vector for the probabilities (probs)
    p_n = 50;
    probs = zeros(p_n,1);
    p_x = 0:p_n - 1;

    % We loop through the first p_n eigenstates, and for each of them we
    % square the wave function and take the sum of all points about X
    % (note that this is the quantized version of an integral)
    for i=1:p_n
        psi2_i = sim.psi_E(1:N + 1,i).^2;
        probs(i) = sum(psi2_i(sim.X > X));
    end
    plot(p_x,probs)
end

legend('P(x > 3)','P(x > 5)','P(x > 7)')

%% End of script %%
disp('Program executed');