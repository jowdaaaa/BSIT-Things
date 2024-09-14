import React, { useState } from 'react';
import { View, Text, TextInput, Button, Image, StyleSheet } from 'react-native';

const SphereCalculator = () => {
  const [radius, setRadius] = useState('');
  const [surfaceArea, setSurfaceArea] = useState('');
  const [volume, setVolume] = useState('');

  const calculateSphere = () => {
    const r = parseFloat(radius);
    if (!isNaN(r)) {
      const surface = 4 * Math.PI * r * r;
      const vol = (4 / 3) * Math.PI * r * r * r;
      setSurfaceArea(surface.toFixed(2));
      setVolume(vol.toFixed(2));
    }
  };

  return (
    <View style={styles.container}>
      <Image source={require('./purple.png')} style={styles.image} />
      <Text style={styles.label}>Enter the radius:</Text>
      <TextInput
        style={styles.input}
        value={radius}
        onChangeText={setRadius}
        keyboardType="numeric"
      />
      <Button
        title="Calculate"
        onPress={calculateSphere}
        color="#f43757" // Set the background color for the button
      />
      <Text style={styles.result}>
        Surface Area: {surfaceArea} m²{'\n'}Volume: {volume} m³
      </Text>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#8a63b3',
  },
  image: {
    width: 200, // Set the width of the image
    height: 200, // Set the height of the image
    marginBottom: 10, // Add margin to separate it from the label
  },
  label: {
    fontSize: 20,
    color: 'white', // Set text color to white for better visibility on the blue background
  },
  input: {
    width: 200,
    height: 40,
    borderColor: 'gray',
    backgroundColor: 'white',
    borderWidth: 1,
    marginVertical: 10,
    fontSize: 16,
    paddingLeft: 5,
    borderRadius: 20,
    textAlign: 'center',
  },
  result: {
    fontSize: 20,
    marginTop: 20,
    color: 'white', // Set text color to white for better visibility on the blue background
  },
});

export default SphereCalculator;
