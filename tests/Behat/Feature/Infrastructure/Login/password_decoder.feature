Feature: As a user I just want to get my password decoded if I want to show this one

  Scenario: If a user is typing in a specific password the result should be the same as expected
    When the user is typing in the password "b31ffe793a4a9195"
    Then the decoded password should be "Test123!"

  Scenario: If a user is typing in a specific password the result should be the same as expected
    When the user is typing in the password "9248fefe237db0799afe795037121f8d793937fc73e30ba8488d129c95"
    Then the decoded password should be "PasswortIstEigentlichZuLang?!"
