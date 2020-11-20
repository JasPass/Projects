# Project Euler: Problem 14
#
#
# Which starting number, under one million, produces the longest chain?
import time

# Sets starting time of program
startTime = time.time()


# Function to run the sequence until 1 is reached
def sequence(n, sequence_length=1):

    # Checks if (n) is even
    if n % 2 == 0:
        n /= 2

    # If (n) is not even, it must be odd
    else:
        n *= 3
        n += 1

    # Counts up the sequence length
    sequence_length += 1

    # Checks if number is still greater than 1
    if n > 1:

        # Runs the next iteration of the sequence
        return sequence(n, sequence_length)

    else:

        # If this code is reached, (n) equals 1, and we are done
        return sequence_length

# Longest found sequence length and corresponding seed
output = [1, 0]

# Loops through all numbers bellow 1 million
for i in range(2, 10**6):

    # Sets the current sequence length
    length = sequence(i)

    # Checks if the sequence length is greater than
    # the previously greatest sequence length
    if length > output[1]:

        # Sets the new greatest sequence length and seed
        output = [i, length]

# Variable to hod answer
ans = output[0]


# Prints out the answer
print('The answer to Project Euler problem 14 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
