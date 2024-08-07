Feature: As a user I just want to create a new password with the correct encoding for logging into the game correctly.

  Scenario: If a user is typing in a specific password the result should be the same as expected
    When the user is typing in the password "Test123!"
    Then the encoded password should be "b31ffe793a4a9195"

  Scenario: If a user is typing in a specific password the result should be the same as expected
    When the user is typing in the password "PasswortIstEigentlichZuLang?!"
    Then the encoded password should be "9248fefe237db0799afe795037121f8d793937fc73e30ba8488d129c95"

  Scenario: If user is trying to set a wrong password it should throw an exception
    When the user is typing in the password ")=(/)(/&)(§!/§)(!§!/!§!&!"
    Then the user should get an exception with message "Failed to encode password. Please check your input"
