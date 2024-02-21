package main

import "fmt"

func main() {
	fmt.Println("Hello, Go!")

	// variables

	var i int
	i = 12
	fmt.Println(i)

	product := hello(5, 6)
	fmt.Println(product)

	// array

	arr := []int{1, 2, 3}
	fmt.Println(arr)

	a := []interface{}{1, "hello", 3.14, true}
	fmt.Println(a[2])
	//append

	arr = append(arr, 4, 5)
	fmt.Println(arr)

	//slicing

	arr1 := arr[0:2]
	fmt.Println("Slicing:", arr1)
}

func hello(a int, b int) (product int) {
	return a * b
}
