# Project Euler: Problem 18
#
#
# Find the maximum total from top to bottom of the triangle below (P18.txt).
import time

# Sets starting time of program
startTime = time.time()

# Number of rows in triangle
rows = 15

# Open P18.txt and load all numbers into (triangle)
with open('P18.txt') as f:
    
    # Loads in the triangle as a two dimensional list
    triangle = [[int(x) for x in line.split()] for line in f]

    # Flips the rows so we can loop from the top of the triangle
    triangle = triangle[::-1]

# Loops through every row in (triangle) starting from the 2.
for x in range(1, rows):

    # Dummy variable for loop
    i = 0

    # Variable to temporarily hold the paths with maximum sum
    # from every element in row (x-1) to row (x)
    maximum = []

    # Loops through all elements in row x
    for n in triangle[x]:

        # Checks which of the two elements bellow (n) produces the largest sum
        if n + triangle[x-1][i] > n + triangle[x-1][i+1]:

            # Add the best path to (maximum)
            maximum.append(n + triangle[x-1][i])
        else:
            maximum.append(n + triangle[x-1][i+1])

        # Counts (i) up 1
        i += 1

    # Sets (x) equal to the paths with greatest sums
    # from row (x-1) ro row (x)
    triangle[x] = maximum

# Variable to hold answer
ans = max(triangle[rows-1])


# Prints out the answer
print('The answer to Project Euler problem 18 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
