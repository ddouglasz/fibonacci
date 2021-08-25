### Project

This is a simple php algorithm to find the nth term of a fibinacci series

### How to start the app

- on your terminal run `php -S localhost:8000 fibonacci.php`

- Navigate to `localhost:8000` to see that the app is up and running

- To test a particular fibonacci output, go to `fibonacci.php` and assign a value to `$nthFibonacci` then refresh the browser to see the newly computed output.

### Approach to problem

- First I know that a fibonacci series is the sum of natural number where each each subsequent number is the sum of the previous two. eg: 0,1,1,2,3,5,8,...

- Secondly, I will have to find a way to track each pair of the last two numbers to form the next fibonacci number and continue that step until I get to the nth term then I stop and output that value.
