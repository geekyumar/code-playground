<?php
function getCpuUsage() {
    // Get CPU load average (1 minute average)
    $load = sys_getloadavg();
    return $load[0]; // Return the CPU usage as a percentage
}

$host = '127.0.0.1';
$port = 8080;

// Create a TCP/IP socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// Bind the socket to an address/port
socket_bind($socket, $host, $port);

// Start listening for connections
socket_listen($socket);

echo "Waiting for client connection on ws://$host:$port...\n";

// Accept a client connection
$client = socket_accept($socket);

if ($client !== false) {
    echo "Client connected!\n";
    
    // Continuously send CPU usage data to the client
    while (true) {
        // Get the current CPU usage
        $cpuUsage = getCpuUsage();
        
        // Prepare the message (CPU usage percentage)
        $message = "CPU Usage: $cpuUsage%";
        
        // Check if the socket is still writable
        $result = @socket_write($client, $cpuUsage, strlen($cpuUsage));
        
        // If writing to the socket fails, break the loop and close the connection
        if ($result === false) {
            echo "Connection lost, closing socket.\n";
            break;
        }
        
        // Output data to the server console
        echo "Sent CPU Usage: $cpuUsage%\n";
        
        // Wait 1 second before sending the next update
        sleep(1);
    }
    
    // Close the client connection
    socket_close($client);
}

// Close the socket server
socket_close($socket);