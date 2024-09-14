import React from 'react';
import { View, Text, Image, StyleSheet } from 'react-native';

function FirstPage() {
  return (
    <View style={styles.container}>
      <Image
        source={require('./pic.jpg')} // Replace with the actual image source
        style={styles.profileImage}
      />
      <Text style={styles.name}>JUDAH PAULO LLAMES VIÑAS</Text>
      <Text style={styles.text}>Nineteen</Text>
      <Text style={styles.b}>Age</Text>
      <Text style={styles.text}>December 1, 2003</Text>
      <Text style={styles.b}>Birthday</Text>
      <Text style={styles.text}>0951-981-4530</Text>
      <Text style={styles.b}>Contact Number</Text>
      <Text style={styles.text}>juvinas@my.cspc.edu.ph</Text>
      <Text style={styles.b}>Email Address</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: '#E4F1FF',
  },
  profileImage: {
    width: 200,
    height: 200,
    borderRadius: 20,
    borderWidth: 5,
    borderColor: 'white',
  },
  name: {
    fontSize: 23,
    fontWeight: 'bold',
    marginBottom: 20,
    color: '#071952',
  },
  text: {
    fontSize: 18,
    margin: -4,
    fontWeight: 'bold',
  },
  b: {
    marginBottom: 15,
    color: '#2E97A7',
  },
});

export default FirstPage;
