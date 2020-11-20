# Project Euler: Problem 9
#
#
# There exists exactly one Pythagorean triplet: a**2 + b**2 = c**2
# for which a + b + c = 1000. Find the product a*b*c.
from time import time

# Sets starting time of program
startTime = time()

# Variable to hold answer
ans = 0

# Sets a start value for a
a = 1

while True:

    # How to get (a) as a function of (b)
    #
    # We know that: a**2 + b**2 = c**2 and a + b + c = 1000
    # => a + b + (a**2 + b**2)**(1/2) = 1000
    # => (a + b - 1000)**2 = a**2 + b**2
    # => 1000**2 + 2*a*b - 2000*a - 2000*b = 0
    # => b = (1000**2 - 2000*a) / (2000 - 2*a)

    # Find (b) from (a)
    b = (1000**2 - 2000*a) / (2000 - 2*a)

    # Finds (c) from (a) and (b)
    c = 1000 - a - b

    # Checks if (b) and (c) are integers
    if b % 1 == 0 and c % 1 == 0:

        # If (b) and (c) was integers we have the answer
        ans = int(a * b * c)

        # We can now break out of the while loop
        break

    # Count (a) up by 1
    a += 1


# Prints out the answer
print('The answer to Project Euler problem 9 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
