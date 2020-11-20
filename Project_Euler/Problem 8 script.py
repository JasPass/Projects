# Project Euler: problem 8
#
#
# Find the greatest product of thirteen consecutive digits in the 1000-digit number.
from time import time

# Sets starting time of program
startTime = time()

# Input string of 1000-digit number
number = '73167176531330624919225119674426574742355349194934' + \
         '96983520312774506326239578318016984801869478851843' + \
         '85861560789112949495459501737958331952853208805511' + \
         '12540698747158523863050715693290963295227443043557' + \
         '66896648950445244523161731856403098711121722383113' + \
         '62229893423380308135336276614282806444486645238749' + \
         '30358907296290491560440772390713810515859307960866' + \
         '70172427121883998797908792274921901699720888093776' + \
         '65727333001053367881220235421809751254540594752243' + \
         '52584907711670556013604839586446706324415722155397' + \
         '53697817977846174064955149290862569321978468622482' + \
         '83972241375657056057490261407972968652414535100474' + \
         '82166370484403199890008895243450658541227588666881' + \
         '16427171479924442928230863465674813919123162824586' + \
         '17866458359124566529476545682848912883142607690042' + \
         '24219022671055626321111109370544217506941658960408' + \
         '07198403850962455444362981230987879927244284909188' + \
         '84580156166097919133875499200524063689912560717606' + \
         '05886116467109405077541002256983155200055935729725' + \
         '71636269561882670428252483600823257530420752963450'

# Variable to hold answer
ans = 1

# Outer loop. Goes through all digits of
# (Number) up til the 13th from last digit
for i in range(0, len(number) - 13):

    # Variable to store product of digits
    product = 1

    # Loops 13 indices ahead of (i)
    for j in range(0, 13):

        # Produce the product of thirteen consecutive
        # digits starting from the index (i)
        product *= int(number[i + j])

    # Checks if (product) is greater then any previous
    if product > ans:

        # Sets new biggest product
        ans = product


# Prints out the answer
print('The answer to Project Euler problem 8 is:', ans)

# Sets finishing time of program
stopTime = time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
