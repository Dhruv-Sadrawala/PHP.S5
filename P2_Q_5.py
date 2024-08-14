"""Write a Python function to calculate the factorial of a number (a non-negative integer). The function
accepts the number as an argument"""

def factorial_count(num):
	
	sum_ad=1

	for i in range(1,num+1):
		sum_ad*=i

	return sum_ad

num=int(input("Enter a number"))

val=factorial_count(num)
print(val)