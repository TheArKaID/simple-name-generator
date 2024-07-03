# Simple Name Generator

## Introduction

Welcome to the Simple Name Generator! This PHP class generates truely random given names, surnames, and full names based on specified lengths. The names are constructed using a pattern of consonants and vowels to ensure they resemble real names.

*Well it's not even a name, just a random word generator based on vowels and consonants :p.

## The Logic

The `SimpleNameGenerator` class uses a simple yet effective logic to generate names:

1. **Vowels and Consonants**: The generator has predefined sets of vowels (`a, e, i, o, u`) and consonants (`b, c, d, f, g, h, j, k, l, m, n, p, q, r, s, t, v, w, x, y, z`).

2. **Pattern Generation**: Based on the specified length, the class creates a pattern of consonants and vowels:
   - Minimum length is 3. If a length less than 3 is specified, it defaults to 3.
   - If the length is exactly 3, the pattern is `CVC`.
   - For lengths greater than 3, the pattern is extended by repeating `VC`:
     - If the length is even, the pattern continues as `CVCV...`.
     - If the length is odd, the pattern continues as `CVC...V`.

3. **Random String Generation**: The class uses the generated pattern to construct a name by randomly selecting vowels and consonants from their respective sets.

## How to Use

### Installation

1. `composer thearkaid/simple-name-generator`
2. `require_once 'vendor/autoload.php';`

### Example Usage

Check the [example.php](example.php) file for a quick example on how to use the `SimpleNameGenerator`;