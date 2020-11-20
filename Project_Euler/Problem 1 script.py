# Project Euler: Problem 1
#
#
# Find the sum of all the multiples of 3 or 5 below 1000.

from time import time

# Sets starting time of program
startTime = time()

# Variable to hold answer
ans = 0

# Loops through all integers from 1 to 999
for i in range(1, 1000):

    # Checks if (i) has remainder 0 when divided by 3 and 5
    if i % 5 == 0 or i % 3 == 0:

        # Adds (i) to answer
        ans += i


# Prints out the answer
print('The answer to Project Euler problem 1 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
