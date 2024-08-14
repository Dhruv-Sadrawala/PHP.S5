"""Create an outer function that will accept two parameters a and b. Create an inner
function inside an outer function that will calculate the addition of a and b. At last, an
outer function will add 5 into addition and return it."""

def outer_add(a,b):

	add=a+b

	print("Outer Function:",add)

	def inner_add(add):
		
		res=add+5
		print("Inner Function:"res)

	inner_add(add)

a=int(input("Enter a number"))
b=int(input("Enter second number"))

val=outer_add(a,b)