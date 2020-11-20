# Project Euler: Problem 5
#
#
# What is the smallest positive number that is evenly divisible
# by all of the numbers from 1 to 20?
from time import time

# Sets starting time of program
startTime = time()

# Variable to hold answer
#
# This must be the prime factorization
# of the number in question
ans = 2**4 * 3**2 * 5 * 7 * 11 * 13 * 17 * 19

# Prints out the answer
print('The answer to Project Euler problem 5 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
