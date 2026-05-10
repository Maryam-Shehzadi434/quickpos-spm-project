<?php

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * SCRUM-56: Skeleton test for empty name
     * This test will FAIL initially (TDD approach)
     */
    public function testEmptyNameField()
    {
        $_POST = [
            'name' => '',
            'email' => 'test@example.com',
            'date' => '2026-12-25',
            'guests' => '2'
        ];
        
        $errors = $this->validateForm($_POST);
        
        // Assert: This will fail initially because validation not implemented
        $this->assertArrayHasKey('name', $errors, 'Name validation should catch empty field');
    }
    
    /**
     * Helper method - returns empty array initially
     * Will be updated in Sprint 1 when real validation is added
     */
    private function validateForm($data)
    {
        // SKELETON: Returns empty array (no errors)
        // This causes tests to FAIL - expected for TDD
        return [];
    }
}

    /**
     * SCRUM-57: Skeleton test for empty email
     * This test will FAIL initially (TDD approach)
     */
    public function testEmptyEmailField()
    {
        $_POST = [
            'name' => 'John Doe',
            'email' => '',
            'date' => '2026-12-25',
            'guests' => '2'
        ];
        
        $errors = $this->validateForm($_POST);
        
        // Assert: This will fail initially because validation not implemented
        $this->assertArrayHasKey('email', $errors, 'Email validation should catch empty field');
    }
        /**
     * SCRUM-58: Skeleton test for invalid email format
     * This test will FAIL initially (TDD approach)
     */
    public function testInvalidEmailFormat()
    {
        $_POST = [
            'name' => 'John Doe',
            'email' => 'notanemail',
            'date' => '2026-12-25',
            'guests' => '2'
        ];
        
        $errors = $this->validateForm($_POST);
        
        // Assert: This will fail initially because validation not implemented
        $this->assertArrayHasKey('email', $errors, 'Email validation should catch invalid format');
    }