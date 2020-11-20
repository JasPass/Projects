# Project Euler: Problem 21
#
#
# Evaluate the sum of all the amicable numbers under 10000.
import time

# Sets starting time of program
startTime = time.time()


# Faction to factorize number
def factorize(n):

    # List to store factors
    divisors = [1]

    # Dummy variable for loop
    i = 2

    # Tries to find a factor of (n)
    #
    # Because factors come in pairs, we only check
    # for values of (a) up to square root of (n)
    while i**2 <= n:

        # Checks if (a) divides (n)
        if n % i == 0:

            # Adds (a) to list of factors
            divisors.append(i)

            # If the other divisor in the pair is not
            # identical to, add that factor to (factors)
            if not (i == n / i):
                divisors.append(int(n / i))

        # Counts up (a)
        i += 1

    # Returns the list of factors
    return divisors

# Variable to hold answer
ans = 0

for a in range(1, 10000):

    # Find d(a) and call it (b)
    b = sum(factorize(a))

    # Checks if d(b) = a and (a) is not (b)
    if sum(factorize(b)) == a and not(b == a):

        # Add (a) to the sum
        ans += a


# Prints out the answer
print('The answer to Project Euler problem 21 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
