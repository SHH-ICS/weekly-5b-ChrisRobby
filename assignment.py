import math

# function to calculate pi
def calcPie(number):
    pie = 0.0
    for n in range (0, number) :
        pie = pie + 4.0 * ((-1)**n / (2.0 * n + 1.0))
    return pie

# get the number of iterations
number = int (input ("Enter a number between 1-100000: "))

pie = 0.0

# validate input
if number < 1 :
    print ('Number too small')
elif number > 100000 :
    print ('Number too big')
else:
    # calculate the value of pi for n iterations
    pie = calcPie(number)
    
print ("The value of pi with", number, "iterations is", pie )
print ("The actual value of pi is", math.pi)

