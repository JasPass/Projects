# Project Euler: Problem 24
#
#
# What is the millionth lexicographic permutation of the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?

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


# Target permutation number
target = 1000000

# List to answer (permutation)
ans = []

# The list of elements to permute
numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

# Loops while there is still elements in (numbers)
# whose place in the permutation needs to be determined
while len(numbers):

    # Reset permutation counter
    counter = 0

    # The number of ways to permute the elements coming
    # before the element we are trying to determine
    N = factorial(len(numbers) - 1)

    # Loops through all the index value of all elements in (numbers)
    for i in range(0, len(numbers)):

        # The current permutation number
        counter = (i + 1) * N

        # Checks if the current permutation number
        # Exceeds or equals the target permutation number
        if counter >= target:

            # Sets the new target permutation number to
            # The difference between (target) and the highest
            # permutation number achievable without exceeding (target)
            target -= i * N

            # Appends the element corresponding to index number of
            # the highest permutation number achievable without
            # exceeding (target)
            ans.append(numbers[i])

            # Removes the element, which place in the target permutation
            # we have found, form the list of elements (numbers)
            numbers.remove(numbers[i])

            # Break out of the for loop
            break


# Prints out the answer
print('The answer to Project Euler problem 24 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
