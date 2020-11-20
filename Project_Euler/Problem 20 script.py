# Project Euler: Problem 20
#
#
# Find the sum of the digits in the number 100!
import time

# Sets starting time of program
startTime = time.time()


# Function to find n!
def factorial(n):

    # Checks if n is 0
    if not n:

        # 0! is defined to be 1
        return 1

    # If n is not 0, we use the
    # fact that: n! = n*(n-1)!
    else:
        return n*factorial(n-1)

# Variable to hold answer
ans = 0

for s in str(factorial(100)):
    ans += int(s)


# Prints out the answer
print('The answer to Project Euler problem 20 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
