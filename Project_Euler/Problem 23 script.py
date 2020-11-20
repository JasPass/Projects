# Project Euler: Problem 23
#
#
# Find the sum of all the positive integers which cannot
# be written as the sum of two abundant numbers.
import time

# Sets starting time of program
startTime = time.time()


# Faction to factorize number
def factorize(n):

    # List to store factors
    divisors = [1]

    # Dummy variable for loop
    m = 2

    # Tries to find a factor of (n)
    #
    # Because factors come in pairs, we only check
    # for values of (a) up to square root of (n)
    while m**2 <= n:

        # Checks if (a) divides (n)
        if n % m == 0:

            # Adds (a) to list of factors
            divisors.append(m)

            # If the other divisor in the pair is not
            # identical to, add that factor to (factors)
            if not (m == n / m):
                divisors.append(int(n / m))

        # Counts up (a)
        m += 1

    # Returns the list of factors
    return divisors

# Variable to hold answer
ans = 0

# Finds sum of all up to 28123
for x in range(1, 28123):
    ans += x

# Variable to store abundant numbers
abundant_numbers = []

# Make a list of abundant numbers less than to 28123
for x in range(12, 28123):
    if x < sum(factorize(x)):
        abundant_numbers.append(x)

# List of all number bellow 28123 which can be written
# as the sum of 2 abundant numbers
sum_nums = []

# Loops through all combinations of abundant numbers
for i in range(0, len(abundant_numbers)):
    for j in range(i, len(abundant_numbers)):

        # Two abundant numbers
        a = abundant_numbers[i]
        b = abundant_numbers[j]

        # Checks if the sum exceeds 28123
        if a + b < 28123:

            # Add the sum to (sum_nums)
            sum_nums.append(a + b)

# Subtract the sum of elements in (sum_nums)
ans -= sum(set(sum_nums))


# Prints out the answer
print('The answer to Project Euler problem 23 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
