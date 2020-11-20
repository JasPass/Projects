# Project Euler: Problem 22
#
#
# What is the total of all the name scores in the file?
import time
import csv

# Sets starting time of program
startTime = time.time()

# Import all names into (name_list)
with open('P22.csv', 'r') as f:
    reader = csv.reader(f, delimiter=',')
    name_list = list(reader)[0]

# Sort (name_list) alphabetically
name_list = sorted(name_list)

# Variable to hold answer
ans = 0

# Find the sum of the name scores
for name in name_list:

    # Variable for alphabetical sum of (name)
    name_sum = 0

    # Loops through the letters in (name)
    for c in name:

        # Finds the alphabetical values of (c) using ASCII
        # and adds the value to (name_sum)
        name_sum += ord(c) - 64

    # Add the name score of (name) to the sum
    ans += name_sum * (name_list.index(name) + 1)


# Prints out the answer
print('The answer to Project Euler problem 22 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
