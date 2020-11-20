# This file is for test purposes
import time

# Sets starting time of program
startTime = time.time()


def dec2bin(num):
    if num == 0:
        return ''
    return dec2bin(num//2) + str(num % 2)


var = 50033452345234
print('0b' + dec2bin(var))

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
