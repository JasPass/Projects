# Project Euler: Problem 4
#
#
# A palindromic number reads the same both ways. Find the largest
# palindrome made from the product of two 3-digit numbers.
from time import time

# Sets starting time of program
startTime = time()

# Variable to hold answer
ans = 0


# Function to check if number is a palindrome
def is_pal(n):

    # List to hold digits of (n)
    digits = [int(d) for d in str(n)]

    # Checks if (digits) equals the reverse of itself
    if digits == digits[::-1]:
        return 1
    else:
        return 0


# Loops through all pairs of numbers with 3 digits
for num1 in range(100, 1000):
    for num2 in range(100, 1000):

        # Checks if the product of
        # (num1) and (num2) is a palindrome
        if is_pal(num1 * num2):

            # Checks if the product is greater than
            # The previously largest found palindrome
            if num1 * num2 > ans:

                # Sets the answer to the new product
                ans = num1 * num2


# Prints out the answer
print('The answer to Project Euler problem 4 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
