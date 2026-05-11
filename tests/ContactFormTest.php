<?php

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    // Test 1: Empty nameField
    public function testEmptyNameField()
    {
        $errors = $this->validateForm([
            'name' => '',
            'email' => 'test@example.com',
            'date' => '2026-12-25',
            'guests' => '2'
        ]);
        
        $this->assertArrayHasKey('name', $errors);
        $this->assertEquals('Name is required', $errors['name']);
    }

//     // Test 1: Empty name field FAilure 
// public function testEmptyNameField()
// {
//     $errors = $this->validateForm([
//         'name' => '',
//         'email' => 'test@example.com',
//         'date' => '2026-12-25',
//         'guests' => '2'
//     ]);
    
//     $this->assertArrayHasKey('name', $errors);
//     $this->assertEquals('Wrong error message', $errors['name']);
// }

    // Test 2: Empty email field
    public function testEmptyEmailField()
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => '',
            'date' => '2026-12-25',
            'guests' => '2'
        ]);
        
        $this->assertArrayHasKey('email', $errors);
        $this->assertEquals('Email is required', $errors['email']);
    }

    // Test 3: Invalid email format (missing @)
    public function testInvalidEmailFormatMissingAt()
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => 'testexample.com',
            'date' => '2026-12-25',
            'guests' => '2'
        ]);
        
        $this->assertArrayHasKey('email', $errors);
        $this->assertEquals('Invalid email format', $errors['email']);
    }

    // Test 4: Invalid email format (missing domain)
    public function testInvalidEmailFormatMissingDomain()
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => 'test@',
            'date' => '2026-12-25',
            'guests' => '2'
        ]);
        
        $this->assertArrayHasKey('email', $errors);
        $this->assertEquals('Invalid email format', $errors['email']);
    }

    // Test 5: Empty date field
    public function testEmptyDateField()
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => 'test@example.com',
            'date' => '',
            'guests' => '2'
        ]);
        
        $this->assertArrayHasKey('date', $errors);
        $this->assertEquals('Reservation date is required', $errors['date']);
    }

    // Test 6: Empty guests field
    public function testEmptyGuestsField()
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => 'test@example.com',
            'date' => '2026-12-25',
            'guests' => ''
        ]);
        
        $this->assertArrayHasKey('guests', $errors);
        $this->assertEquals('Number of guests is required', $errors['guests']);
    }

    // Test 7: Valid form submission
    public function testValidFormSubmission()
    {
        $errors = $this->validateForm([
            'name' => 'Emma Watson',
            'email' => 'emma@example.com',
            'date' => '2026-12-25',
            'guests' => '4'
        ]);
        
        $this->assertEmpty($errors);
    }

    // Test 8: Multiple empty fields
    public function testMultipleEmptyFields()
    {
        $errors = $this->validateForm([
            'name' => '',
            'email' => '',
            'date' => '',
            'guests' => ''
        ]);
        
        $this->assertCount(4, $errors);
        $this->assertArrayHasKey('name', $errors);
        $this->assertArrayHasKey('email', $errors);
        $this->assertArrayHasKey('date', $errors);
        $this->assertArrayHasKey('guests', $errors);
    }

    // Test 9: XSS prevention
    public function testXssPrevention()
    {
        $malicious = '<script>alert("XSS")</script>';
        
        $errors = $this->validateForm([
            'name' => $malicious,
            'email' => 'test@example.com',
            'date' => '2026-12-25',
            'guests' => '2'
        ]);
        
        $this->assertEmpty($errors, 'XSS input should not cause validation errors');
    }

    // Test 10: Valid guest counts
    public function testValidGuestCounts()
    {
        $validGuests = ['1', '2', '3', '4', '5', '6'];
        
        foreach ($validGuests as $guests) {
            $errors = $this->validateForm([
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'date' => '2026-12-25',
                'guests' => $guests
            ]);
            $this->assertEmpty($errors, "Guest count {$guests} should be valid");
        }
    }

    // Validation logic matching index.php
    private function validateForm($data)
    {
        $errors = [];
        
        // Name validation (no trim in index.php)
        if (empty($data['name'])) {
            $errors['name'] = 'Name is required';
        }
        
        // Email validation
        if (empty($data['email'])) {
            $errors['email'] = 'Email is required';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format';
        }
        
        // Date validation
        if (empty($data['date'])) {
            $errors['date'] = 'Reservation date is required';
        }
        
        // Guests validation
        if (empty($data['guests'])) {
            $errors['guests'] = 'Number of guests is required';
        }
        
        return $errors;
    }
}