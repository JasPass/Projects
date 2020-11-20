# Project Euler: Problem 7
#
#
# What is the 10001st prime number?
from time import time

# Sets starting time of program
startTime = time()


# Function to determine if (num) is a prime
def is_prime(num):

    # Checks if (num) is divisible by 2
    if num % 2 == 0:
        return False

    # Index variable
    k = 3

    # Tries to find a factor of (num)
    #
    # Because factors come in pairs, we only check
    # for values of (k) up to square root of (num)
    while k**2 <= num:

        # Checks if (num) is divisible by (k)
        if num % k == 0:
            return 0

        # We can count (k) up by 2 each time
        # because if (num) is not divisible by 2
        # then it is not divisible by any multiple of 2
        k += 2

    # If none of the numbers bellow square root of (num)
    # divides (num) it most by a prime number
    return True


# Variable to hold answer
ans = 3

# The prime number index
numPrime = 2

# Keeps looping until we get to the 10001st prime
while numPrime < 10001:

    # We count (ans) up by 2
    # because no prime is even
    ans += 2

    # Checks if (ans) is prime
    if is_prime(ans):

        # Counts up the prime index
        numPrime += 1


# Prints out the answer
print('The answer to Project Euler problem 7 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
