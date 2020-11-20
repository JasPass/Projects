# Project Euler: Problem 2
#
#
# By considering the terms in the Fibonacci sequence whose values do not
# exceed four million, find the sum of the even-valued terms.
from time import time

# Sets starting time of program
startTime = time()

# Variable to hold answer
ans = 0

# Seed numbers for the Fibonacci sequence
seed1 = 1
seed2 = 1

# Generates the 3rd Fibonacci number
fib_num = seed1 + seed2

# Loops while the fibonacci numbers are smaller then 4 mil.
while fib_num < 4*10**6:

    # Checks if the current fibonacci
    # number is divisible by 2
    if fib_num % 2 == 0:

        # Adds the current fibonacci number to answer
        ans += fib_num

    # Updates seeds numbers
    seed1 = seed2
    seed2 = fib_num

    # Finds the next fibonacci number
    fib_num = seed1 + seed2


# Prints out the answer
print('The answer to Project Euler problem 2 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
