# Project Euler: Problem 19
#
#
# How many Sundays fell on the first of the month
# during the twentieth century (1 Jan 1901 to 31 Dec 2000)?
import time

# Sets starting time of program
startTime = time.time()

# 1 Jan 1901 was a Tuesday (Monday is 0)
current_day = 1

# Variable to hold answer
ans = 0

# Loops through all the year
for year in range(1901, 2001):

    # Loops through all the months
    for month in range(1, 13):

        # April, June, September and November has 31 days
        if month == 4 or month == 6 or month == 9 or month == 11:
            days = 31

        # Checks if the month is February
        elif month == 2:

            # Checks for leap years
            if year % 4 == 0 and (not(year % 100 == 0) or year % 400 == 0):

                # If leap year February has 29 days
                days = 30
            else:

                # If not it has 28 days
                days = 29

        # Any other month has 31 days
        else:
            days = 32

        # Loops through all the days in the month
        for k in range(1, days):

            # Checks if it is the first of the month and a Sunday
            if k == 1 and current_day == 6:

                # Counts up the number of Sundays occurring
                # on the first of the month
                ans += 1

            # Count up the current day
            current_day += 1

            # If we pas Sunday go back to Monday
            current_day %= 7


# Prints out the answer
print('The answer to Project Euler problem 19 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
