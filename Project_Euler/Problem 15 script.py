# Project Euler: Problem 15
#
#
# How many such routes are there through a 20×20 grid?
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

# In a 20x20 grid every path consists of 40 choices of either:
# GO RIGHT or GO DOWN. We have to GO RIGHT 20 times in total and
# we also have to GO DOWN 20 ties in total. Therefore, if we decide
# In which 20 out of the 40 cases we choose GO DOWN, the path is
# determined. Therefore the answer is 40 choose 20.

# Calculate 40 choose 20
ans = int(factorial(40) / factorial(20)**2)

# Prints out the answer
print('The answer to Project Euler problem 15 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
