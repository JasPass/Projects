# Project Euler: Problem 6
#
#
# Find the difference between the sum of the squares of the first one hundred
# natural numbers and the square of the sum.
from time import time

# Sets starting time of program
startTime = time()


# Function to find the square of the sum
# of the first n natural numbers
def square_of_sum(n):

    # Variable to store result
    result = 0

    # Loop through the natural numbers from 1 to (n)
    for i in range(1, n + 1):

        # Add (i) to (result)
        result += i

    # Square (result) before returning it
    return result**2


# Function to find the sum of the squares
# of the first n natural numbers
def sum_of_squares(n):

    # Variable to store result
    result = 0
    
    # Loop through the natural numbers from 1 to (n)
    for i in range(1, n + 1):

        # Add (i) to (result)
        result += i**2

    # Return (result)
    return result


# Variable to hold answer
ans = square_of_sum(100) - sum_of_squares(100)

# Prints out the answer
print('The answer to Project Euler problem 6 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
