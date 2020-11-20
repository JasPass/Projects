# Project Euler: Problem 13
#
#
# Work out the first ten digits of the sum
# of the following one-hundred 50-digit numbers.
import time

# Sets starting time of program
startTime = time.time()

# Import the 100 50-digit numbers into (numbers)
with open('P13.txt') as f:

    # Variable to hold the the 100 50-digit numbers
    numbers = f.readlines()

# Variable to hold answer
ans = 0

# Loop through all the 100 numbers
for num in numbers:

    # Only the first 11 digits of each number
    # Can affect the first 10 digits of the sum
    ans += int(num[:11])

# Convert (ans) back to a string ans
# get the first 10 digits of the sum
ans = str(ans)[:10]

# Prints out the answer
print('The answer to Project Euler problem 13 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
