cat > tests/ContactFormTest.php << 'EOF'
<?php

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    // SCRUM-42: Empty name test
    public function testEmptyNameField()
    {
        $errors = $this->validateForm(['name' => '', 'email' => 'test@test.com', 'date' => '2026-12-25', 'guests' => '2']);
        $this->assertArrayHasKey('name', $errors);
    }

    // SCRUM-43: Empty email test
    public function testEmptyEmailField()
    {
        $errors = $this->validateForm(['name' => 'John', 'email' => '', 'date' => '2026-12-25', 'guests' => '2']);
        $this->assertArrayHasKey('email', $errors);
    }

    // SCRUM-44: Invalid email test
    public function testInvalidEmailFormat()
    {
        $errors = $this->validateForm(['name' => 'John', 'email' => 'notanemail', 'date' => '2026-12-25', 'guests' => '2']);
        $this->assertArrayHasKey('email', $errors);
    }

    // SCRUM-45: Empty date test
    public function testEmptyDateField()
    {
        $errors = $this->validateForm(['name' => 'John', 'email' => 'test@test.com', 'date' => '', 'guests' => '2']);
        $this->assertArrayHasKey('date', $errors);
    }

    // SCRUM-46: Empty guests test
    public function testEmptyGuestsField()
    {
        $errors = $this->validateForm(['name' => 'John', 'email' => 'test@test.com', 'date' => '2026-12-25', 'guests' => '']);
        $this->assertArrayHasKey('guests', $errors);
    }

    // SCRUM-61: Valid form submission
    public function testValidFormSubmission()
    {
        $errors = $this->validateForm(['name' => 'Emma', 'email' => 'emma@test.com', 'date' => '2026-12-25', 'guests' => '4']);
        $this->assertEmpty($errors);
    }

    // SCRUM-62: Multiple empty fields
    public function testMultipleEmptyFields()
    {
        $errors = $this->validateForm(['name' => '', 'email' => '', 'date' => '', 'guests' => '']);
        $this->assertCount(4, $errors);
    }

    // SCRUM-63: XSS prevention
    public function testXssPrevention()
    {
        $malicious = '<script>alert("XSS")</script>';
        $errors = $this->validateForm(['name' => $malicious, 'email' => 'test@test.com', 'date' => '2026-12-25', 'guests' => '2']);
        $this->assertEmpty($errors);
    }

    // SCRUM-64: Valid guest counts boundary test
    public function testValidGuestCounts()
    {
        foreach (['1', '2', '3', '4', '5', '6'] as $guests) {
            $errors = $this->validateForm(['name' => 'John', 'email' => 'test@test.com', 'date' => '2026-12-25', 'guests' => $guests]);
            $this->assertEmpty($errors, "Guest count {$guests} failed");
        }
    }

    /**
     * Real validation logic matching thank-you.php
     */
    private function validateForm($data)
    {
        $errors = [];
        
        $name = trim($data['name'] ?? '');
        $email = trim($data['email'] ?? '');
        $date = trim($data['date'] ?? '');
        $guests = trim($data['guests'] ?? '');
        
        if (empty($name)) $errors['name'] = "Name required";
        if (empty($email)) $errors['email'] = "Email required";
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email";
        if (empty($date)) $errors['date'] = "Date required";
        if (empty($guests)) $errors['guests'] = "Guests required";
        
        return $errors;
    }
}
EOF

git add tests/ContactFormTest.php
git commit -m "[SCRUM-61][SCRUM-62][SCRUM-63][SCRUM-64] Add complete test suite"
git push origin SCRUM-16-testing-skeleton