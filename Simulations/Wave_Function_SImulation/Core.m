%% Computer exercises: KVM1 %%

% Class to contain the core functions of any simulation
% Coded by Rasmus Nielsen: JBZ701

%% Class containing simulation variables and functions %%
classdef Core
    
    % Store important variables for simulation
    properties
        % Space interval size
        dx;
        
        % Vector of space grid positions
        X;

        % Kinetic energy matrix;
        T;
        
        % Potential energy matrix
        V;
        
        % Hamiltonian matrix
        H;
        
        % Eigenvalues of hamiltonian (vector)
        E;
        
        % Eigenvectors of hamiltonian
        psi_E;
    end
    
    % Define import functions for simulation
    methods
        
        % Constructor function
        function obj = Core(N, L)
            
            % Set the space interval size from (N) and (L)
            obj.dx = 2 * L / N;
            
            % Generate the position vectore from (L) and (dx)
            obj.X = (-L : obj.dx : L)';
            
            % Set all matrices to be the zero matrix by default
            [obj.T, obj.V, obj.H, obj.E, obj.psi_E] = deal(zeros(N + 1));
            
        end
        
        % Function to set kinetic energy matrix
        function obj = kinetic(obj, isPeriodic)
            
            % Get number of points in space from X
            N = length(obj.X) - 1;
            
            % d^2/dx^2 matrix
            ones = [zeros(N, 1), eye(N); zeros(1, N + 1)];
            D2 = ones + ones' - 2 * eye(N + 1);
            
            % Enable periodic boundery conditions 
            if isPeriodic
                corner = [zeros(1, N), 1; zeros(N, N + 1)];
                D2 = D2 + corner + corner';
            end
            
            % Set the Kinetic energy matrix T
            obj.T = -D2 / (2 * obj.dx^2);
            
        end
        
        % Function to set potential energy matrix
        function obj = potential(obj, V0, type)
            
            % Define x variable for later use
            x = obj.X;
            
            % Set the potential accordoding to V0 and type
            switch type
                case 'harmonic'
                    % Harmonic oscillator potential
                    obj.V = diag( V0 * x.^2 / 2 );
                case 'gaussian'
                    % Gaussian potential
                    obj.V = diag( -V0 * exp(-x.^2) );
                case 'double-well'
                    % Double-well potential
                    obj.V = diag( obj.X.^2 / 2 + V0 * exp(-x.^2) );
                case 'periodic'
                    % Cosine potential
                    obj.V = diag( V0 * cos(2 * pi * x) );
                otherwise
                    % User defined potential
                    try
                        obj.V = diag( V0 * eval(type) );
                    catch
                        warning('Potential not recognized. Using V=0');
                        obj.V = 0;
                    end
            end
            
        end
        
        % Function to set hamilton matrix,
        % and find its eigenvectors and eigenvalues
        function obj = hamilton(obj)
            
            % Set H from T and V
            obj.H = obj.T + obj.V;
            
            % Find the eigenvectors and eigenvalues of H
            [obj.psi_E, obj.E] = eig(obj.H);
            
            % Convert eigenvalue matrix, E, to vector
            obj.E = diag(obj.E);
            
        end
        
        % Function to evolve wavefunction in time
        % First argument is the expansion coefficients
        % in the energy eiegn-basis
        % Second argument is amount of time to evolve
        % wavefunction forward by
        function Psi = update(obj, a0, t)
            
            % Construct Psi(t) from recipe
            
            % Update the coordinates of Psi
            at = a0 .* exp(-1i * obj.E * t);

            % Make the state vector at time t
            Psi = obj.psi_E * at;
            
        end
    end
end

%% End of file %%