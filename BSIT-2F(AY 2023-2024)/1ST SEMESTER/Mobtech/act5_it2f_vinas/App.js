import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { View, Text, TouchableOpacity } from 'react-native'; // Import TouchableOpacity
import FirstPage from './FirstPage';
import SecondPage from './SecondPage';
import ThirdPage from './ThirdPage';

const Stack = createNativeStackNavigator();

function App({ navigation }) {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen
          name="Home"
          component={Home}
          options={{
            title: 'Hello, Welcome!',
          }}
        />
        <Stack.Screen name="BasicInfo" component={FirstPage} />
        <Stack.Screen name="EducationalAttainment" component={SecondPage} />
        <Stack.Screen name="FunInfo" component={ThirdPage} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

function Home({ navigation }) {
  return (
    <View style={styles.container}>
      <Text style={styles.wel}>Welcome to</Text>
      <Text style={styles.title}>Jowdaaa's Bio</Text>
      <View style={styles.buttonContainer}>
        <TouchableOpacity
          style={styles.button}
          onPress={() => navigation.navigate('BasicInfo')}
        >
          <Text style={styles.buttonText}>Basic Information</Text>
        </TouchableOpacity>
        <TouchableOpacity
          style={styles.button}
          onPress={() => navigation.navigate('EducationalAttainment')}
        >
          <Text style={styles.buttonText}>Education Attainment</Text>
        </TouchableOpacity>
        <TouchableOpacity
          style={styles.button}
          onPress={() => navigation.navigate('FunInfo')}
        >
          <Text style={styles.buttonText}>Other Information</Text>
        </TouchableOpacity>
      </View>
    </View>
  );
}

const styles = {
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#E4F1FF',
  },
  title: {
    fontSize: 28,
    fontWeight: 'bold',
    marginBottom: 30,
  },
  buttonContainer: {
    width: '80%',
    alignItems: 'center',
  },
  button: {
    width: '100%',
    padding: 15, 
    marginBottom: 20, 
    backgroundColor: '#053B50', 
    borderRadius: 30,

  },
  buttonText: {
    fontSize: 18,
    fontWeight: 'bold',
    textAlign: 'center',
    color: 'white',
  },
};

export default App;
