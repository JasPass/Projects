# Project Euler: Problem 16
#
#
# What is the sum of the digits of the number 2**1000?
import time

# Sets starting time of program
startTime = time.time()

# Number to find sum of digits of
number = 2**1000

# Variable to hold answer
ans = 0

# Loops through all digits of (number)
for d in str(number):

    # Add digit to sum
    ans += int(d)


# Prints out the answer
print('The answer to Project Euler problem 16 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')