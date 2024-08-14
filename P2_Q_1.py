"""Write a program to create function calculation () such that it can accept two variables
and calculate addition and subtraction. Also, it must return both addition and
subtraction in a single return call."""

def calculation(a,b):

	add = a+b
	sub = a-b

	return [add,sub]

a=int(input("Enter first number:"))
b=int(input("Enter second number:"))

res=calculation(a,b)

print("Sum is :",res[0])
print("Sub is :",res[1])