import React, { useState } from 'react';
import { View, StyleSheet, Text, TextInput, TouchableOpacity } from 'react-native';

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: 'lightblue',
  },
  input: {
    width: 300,
    height: 40,
    borderWidth: 1.5,
    borderColor: 'darkblue',
    margin: 10,
    paddingLeft: 20,
    borderRadius: 20,
    backgroundColor: '#F0F0F0',
  },
  button: {
    backgroundColor: 'darkblue',
    padding: 10,
    borderRadius: 5,
    marginTop: 10,
  },
  buttonText: {
    color: 'white',
    fontSize: 16,
  },
  result: {
    marginTop: 20,
    fontSize: 25,
    color: 'red',
    fontWeight: 'bold',
  },
});

export default function App() {
  const [name1, setName1] = useState('');
  const [name2, setName2] = useState('');
  const [result, setResult] = useState('');

  const calculateFLAMES = () => {
    const name1Formatted = name1.toUpperCase().replace(/ /g, '');
    const name2Formatted = name2.toUpperCase().replace(/ /g, '');

    const combinedNames = name1Formatted + name2Formatted;
    const letterCounts = {};

    for (const letter of combinedNames) {
      if (letter in letterCounts) {
        letterCounts[letter]++;
      } else {
        letterCounts[letter] = 1;
      }
    }

    let mostCommonLetter = '';
    let maxCount = 0;

    for (const letter in letterCounts) {
      if (letterCounts[letter] > maxCount) {
        mostCommonLetter = letter;
        maxCount = letterCounts[letter];
      }
    }

    const resultOptions = {
      F: "Friendship",
      L: "Love",
      A: "Affection",
      M: "Marriage",
      E: "Enemies",
      S: "Siblings",
    };

    setResult(resultOptions[mostCommonLetter]);
  };

  return (
    <View style={styles.container}>
      <Text style={{ fontSize: 24 }}>🔥FLAMES Games🔥</Text>
      <Text>Enter the names of the pair in question...</Text>
      <Text></Text>
      <TextInput
        style={styles.input}
        placeholder="Enter Name 1"
        value={name1}
        onChangeText={(text) => setName1(text)}
      />
      <TextInput
        style={styles.input}
        placeholder="Enter Name 2"
        value={name2}
        onChangeText={(text) => setName2(text)}
      />
      <TouchableOpacity style={styles.button} onPress={calculateFLAMES}>
        <Text style={styles.buttonText}>CALCULATE</Text>
      </TouchableOpacity>
      {result && (
        <Text style={styles.result}>Result : {result}</Text>
      )}
    </View>
  );
}


