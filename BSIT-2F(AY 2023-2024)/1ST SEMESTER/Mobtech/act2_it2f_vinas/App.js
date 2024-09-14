import React, { useState } from 'react';
import { View, StyleSheet, Text, TouchableWithoutFeedback } from 'react-native';

export default function App() {
  const colors = [
    { name: 'White', hex: '#ffffff' },
    { name: 'Red', hex: '#ff0000' },
    { name: 'Blue', hex: '#0000ff' },
    { name: 'Yellow', hex: '#ffff00' },
  ];
  const [bgColorIndex, setBgColorIndex] = useState(0); // Initial color index

  const changeBackgroundColor = () => {
    const nextIndex = (bgColorIndex + 1) % colors.length;
    setBgColorIndex(nextIndex);
  };

  const currentColor = colors[bgColorIndex];
  let textColor;

  if (isColorLight(currentColor.hex)) {
    textColor = '#000000'; // Use black text for light backgrounds
  } else {
    textColor = '#ffffff'; // Use white text for dark backgrounds
  }

  return (
    <TouchableWithoutFeedback onPress={changeBackgroundColor}>
      <View style={[styles.container, { backgroundColor: currentColor.hex }]}>
        <Text style={[styles.colorText, { color: textColor }]}>
          {currentColor.name}
        </Text>
      </View>
    </TouchableWithoutFeedback>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  colorText: {
    fontSize: 20,
  },
});

function isColorLight(hexColor) {
  // Calculate luminance for the given color
  const r = parseInt(hexColor.slice(1, 3), 16);
  const g = parseInt(hexColor.slice(3, 5), 16);
  const b = parseInt(hexColor.slice(5, 7), 16);

  const luminance = (0.299 * r + 0.587 * g + 0.114 * b) / 255;

  // Return true if the color is light (luminance > 0.5)
  return luminance > 0.5;
}