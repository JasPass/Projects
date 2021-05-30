# Code to compute coupling-coefficients between different SO(3) irreps,
# using the approach of: http://arxiv.org/abs/1006.2875v1

from sympy import sqrt, Rational, Matrix


# Matrix-elements for J_p / J_m
def MatrixElements(J, M, s):
    if s == 1:
        return sqrt((J - M) * (J + M + 1))
    elif s == -1:
        return sqrt((J + M) * (J - M + 1))


# Condition for M_1 x M_2 --> M for SO(2)
def IsValid(M1, M2, J, M):
    if M1 + M2 == M and -J <= M <= J:
        return True
    else:
        return False


# Gives the order of coupling-coefficients,
# as returned by CouplingCoefficients()
def Indexing(J1, J2, J):

    ordering = []

    for N1 in range(2 * J1 + 1):
        for N2 in range(2 * J2 + 1):
            for N in range(2 * J + 1):

                if IsValid(N1 - J1, N2 - J2, J, N - J):
                    ordering.append([N1 - J1, N2 - J2, N - J])

    return ordering


# All relations for given M1 and M2 in the lattice
def PointRelations(J1, M1, J2, M2, J, M, s):

    relation = []

    for N1 in range(2 * J1 + 1):
        for N2 in range(2 * J2 + 1):

            for N in range(2 * J + 1):
                if IsValid(N1 - J1, N2 - J2, J, N - J):

                    if N1 - J1 == M1 and N2 - J2 == M2 and N - J == M + s:
                        relation.append(MatrixElements(J, M, s))

                    elif N1 - J1 == M1 - s and N2 - J2 == M2 and N - J == M:
                        relation.append(-MatrixElements(J1, M1 - s, s))

                    elif N1 - J1 == M1 and N2 - J2 == M2 - s and N - J == M:
                        relation.append(-MatrixElements(J2, M2 - s, s))

                    else:
                        relation.append(0)

    return relation


# Computes the normalization for the coupling-coefficients
def Normalization(NullVector, J1, J2, J):

    total = 0
    ordering = Indexing(J1, J2, J)

    for n in range(len(NullVector)):

        if ordering[n][2] == J:

            total += NullVector[n]**2

    return total


# Computes the non normalized coupling-coefficients
def MasterMatrix(J1, J2, J):

    relations = []

    for N1 in range(2 * J1 + 1):
        for N2 in range(2 * J2 + 1):

            for N in range(2 * J + 1):
                for s in [1, -1]:

                    relation = PointRelations(J1, N1 - J1, J2, N2 - J2, J, N - J, s)

                    if relation not in relations and list(set(relation)) != [0]:
                        relations.append(relation)

    return relations


# Computes the normalized coupling coefficients
def CouplingCoefficients(J1, J2, J):

    NullVector = Matrix(MasterMatrix(J1, J2, J)).nullspace()[0]

    return list(NullVector / sqrt(Normalization(NullVector, J1, J2, J)))


# Print out the coupling-coefficients for J1 = 1/2 x J2 = 1/2 --> J = 1
NullVector1 = MasterMatrix(Rational(5, 2), Rational(5, 2), Rational(6, 2))
print(NullVector1)
print(len(NullVector1))
print(Indexing(Rational(5, 2), Rational(5, 2), Rational(6, 2)))

print(CouplingCoefficients(Rational(5, 2), Rational(5, 2), Rational(6, 2)))
