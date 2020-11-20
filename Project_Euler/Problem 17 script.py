# Project Euler: Problem 17
#
#
# If all the numbers from 1 to 1000 (one thousand)
# inclusive were written out in words, how many letters would be used?
import time

# Sets starting time of program
startTime = time.time()

# List containing the necessary numbers in words 
words = [
    [
        'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen',
        'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    ], [
        'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'
    ]
]

# Variable to hold answer
ans = 0

# Loops through all numbers from 1 to 999 as words
for i in range(0, 10):
    for j in range(0, 9):
        for k in range(0, 20):
            
            # Checks if we have [1-9] hundreds
            if i:
                
                # Checks if we have [20-90] tens
                if j:
                    
                    # Checks if we have [1-19] ones
                    if k:
                        
                        # Only [1-9] ones are allowed here
                        if (k - 1) <= 8:
                            
                            # Adds length of word to (ans)
                            ans += len(words[0][i - 1] + 'hundred' + 'and' + words[1][j - 1] + words[0][k - 1])
                    else:
                        
                        # Adds length of word to (ans)
                        ans += len(words[0][i - 1] + 'hundred' + 'and' + words[1][j - 1])
                else:

                    # Checks if we have [1-19] ones
                    if k:

                        # Adds length of word to (ans)
                        ans += len(words[0][i - 1] + 'hundred' + 'and' + words[0][k - 1])
                    else:

                        # Adds length of word to (ans)
                        ans += len(words[0][i - 1] + 'hundred')
            else:

                # Checks if we have [20-90] tens
                if j:

                    # Checks if we have [1-19] ones
                    if k:

                        # Only [1-9] ones are allowed here
                        if (k - 1) <= 8:
                            
                            # Adds length of word to (ans)
                            ans += len(words[1][j - 1] + words[0][k - 1])
                    else:

                        # Adds length of word to (ans)
                        ans += len(words[1][j - 1])
                else:

                    # Checks if we have [1-19] ones
                    if k:
                        
                        # Adds length of word to (ans)
                        ans += len(words[0][k - 1])

# Adds the last word to (ans)
ans += len('one' + 'thousand')


# Prints out the answer
print('The answer to Project Euler problem 17 is:', ans)

# Sets finishing time of program
stopTime = time.time()

# Prints the time it took the program to execute
print('The computation took', '%.2g' % (stopTime - startTime), 'seconds')
