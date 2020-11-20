# Project Euler: Problem 12
#
#
# What is the value of the first triangle number
# to have over five hundred divisors?
import time

# Sets starting time of program
startTime = time.time()


# Faction to factorize number
def factorize(n):

    # List to store factors
    divisors = [1, n]

    # Dummy variable for loop
    a = 2

    # Tries to find a factor of (n)
    #
    # Because factors come in pairs, we only check
    # for values of (a) up to square root of (n)
    while a**2 <= n:

        # Checks if (a) divides (n)
        if n % a == 0:

            # Adds (a) to list of factors
            divisors.append(a)

            # If the other divisor in the pair is not
            # identical to, add that factor to (factors)
            if not(a == n/a):
                divisors.append(int(n/a))

        # Counts up (a)
        a += 1

    # Returns the list of factors
    return divisors

# Variable to hold answer
ans = 1

# Dummy variable for generating triangle numbers
i = 2

# Loops until we find the desired triangle number
while True:

    # Checks if (ans) has over 500 divisors
    if len(factorize(ans)) > 500:

        # If (ans) has over 500 divisors
        # we have found the correct answer
        break

    # Generates the next triangle number
    ans += i

    # Counts up (i)
    i += 1


# Prints out the answer
print('The answer to Project Euler problem 12 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
