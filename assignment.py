import math

# get the number of iterations
number = int (input ("Enter a number between 1-500: "))

pie = 0.0

# validate input
if number < 1 :
    print ('Number too small')
elif number > 500 :
    print ('Number too big')
else:
    # calculate the value of pi for n iterations
    for n in range (0, number) :
        pie = pie + 4.0 * ((-1)**n / (2.0 * n + 1.0))

print ("The value of pi with", number, "iterations is", pie )
print ("The actual value of pi is", math.pi)

