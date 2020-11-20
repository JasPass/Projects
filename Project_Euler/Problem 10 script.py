# Project Euler: problem 10
#
#
# Find the sum of all the primes below two million.
from time import time

# Sets starting time of program
startTime = time()

# Variable to hold answer
ans = 2


# Function to determine of (num) is a prime
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


# Upper bound for loop
bound = 2*10**6

# Loops until (number) exceeds two million
# We count (number) up by 2
# because no prime is even
for number in range(3, bound, 2):

    # Checks if (number) is prime
    if is_prime(number):

        # Adds (number) to (ans)
        ans += number


# Prints out the answer
print('The answer to Project Euler problem 10 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
