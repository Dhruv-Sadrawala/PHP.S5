"""Write a program to create a function employee () using the following conditions.
a. It should accept the employee’s name and salary and display both.
b. If the salary is missing in the function call, then assign default value 10000 to
salary"""

def print_function(name,salary=10000):
	
	print("Name:",name)
	print("Salary:",salary)


name = input("Enter your name:")
salary = input("Enter your salary:")



print_function(name)