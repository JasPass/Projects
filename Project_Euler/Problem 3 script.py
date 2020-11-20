# Project Euler: Problem 3
#
#
# What is the largest prime factor of the number 600851475143 ?
from time import time

# Sets starting time of program
startTime = time()

# Number to find biggest prime factor of
value = 600851475143


# Function to find largest prime factor of number
#
# Works by cutting of all other prime factors
# on order, until only the largest one is left
def largest_prime_factor(n, a=2):

    # Tries to find a prime factor of (n)
    #
    # Because factors come in pairs, we only check
    # for values of (a) up to square root of (n)
    while not (n % a == 0) and a**2 <= n:

        # Counts (a) up one
        a += 1

    # Checks if a prime factor of (n) was found
    if a**2 <= n:

        # The function calls it self to
        # see if bigger prime factors exist
        return largest_prime_factor(n // a, a)

    else:

        # If this code is reached, it means that
        # (n) has no prime factors, and we are done
        return n


# Variable to hold answer
ans = largest_prime_factor(value)

# Prints out the answer
print('The answer to Project Euler problem 3 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
