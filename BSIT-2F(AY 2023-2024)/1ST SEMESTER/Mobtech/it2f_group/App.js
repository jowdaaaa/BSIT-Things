import React, { useState } from 'react';
import {
  View,
  Text,
  Button,
  StyleSheet,
  TouchableOpacity,
  ImageBackground,
  Image,
  ScrollView,
} from 'react-native';

const App = () => {
  const [meals, setMeals] = useState([
    { id: '1', name: 'Burger', price: 10.99, quantity: 0, image: require('./burger.jpg') },
    { id: '2', name: 'Pizza', price: 12.99, quantity: 0, image: require('./pizza.jpg') },
    { id: '3', name: 'Salad', price: 8.99, quantity: 0, image: require('./salad.jpg') },
    { id: '4', name: 'Pasta', price: 11.99, quantity: 0, image: require('./pasta.jpg') },
    { id: '5', name: 'Sushi', price: 14.99, quantity: 0, image: require('./sushi.jpg') },
    { id: '6', name: 'takoyaki', price: 10.99, quantity: 0, image: require('./takoyaki.jpg') },
    { id: '7', name: 'Chicken Curry', price: 13.99, quantity: 0, image: require('./chicken.jpg') },
    { id: '8', name: 'Steak', price: 16.99, quantity: 0, image: require('./steak.jpg') },
    { id: '9', name: 'Fish and Chips', price: 9.99, quantity: 0, image: require('./fc.jpg') },
    { id: '10', name: 'Samosa', price: 5.99, quantity: 0, image: require('./samosa.jpg') },
  ]);
  const [showSelectedMeals, setShowSelectedMeals] = useState(false);

  const toggleSelection = (mealId) => {
    setMeals((prevMeals) =>
      prevMeals.map((meal) =>
        meal.id === mealId ? { ...meal, quantity: meal.quantity + 1 } : meal
      )
    );
  };

  const decreaseQuantity = (mealId) => {
    setMeals((prevMeals) =>
      prevMeals.map((meal) =>
        meal.id === mealId && meal.quantity > 0 ? { ...meal, quantity: meal.quantity - 1 } : meal
      )
    );
  };

  const getSelectedMeals = () => {
    return meals.filter((meal) => meal.quantity > 0);
  };

  const clearSelection = () => {
    setMeals((prevMeals) =>
      prevMeals.map((meal) => ({
        ...meal,
        quantity: 0,
      }))
    );
  };

  const selectedMeals = getSelectedMeals();
  const totalPrice = selectedMeals.reduce(
    (total, meal) => total + meal.price * meal.quantity,
    0
  );

   return (
    <ImageBackground source={require('./backg.jpg')} style={styles.background}>
      <ScrollView contentContainerStyle={styles.scrollContainer}>
        <View style={styles.container}>
          <Text style={styles.title}>𝐌𝐞𝐚𝐥 𝐎𝐫𝐝𝐞𝐫𝐢𝐧𝐠 𝐒𝐲𝐬𝐭𝐞𝐦</Text>

          {/* Apply a light brown background to the table */}
      
            <View style={styles.table}>
              <View style={styles.row}>
                <Text style={styles.header}>MEALS / PRICE</Text>
                <Text style={styles.header}>QUANTITY</Text>
                <Text style={styles.header}>TOTAL PRICE</Text>
                <Text style={styles.header}>DECREASE</Text>
              </View>
            {meals.map((meal) => (
              <TouchableOpacity key={meal.id} onPress={() => toggleSelection(meal.id)}>
                <View
                  style={[
                    styles.row,
                    { backgroundColor: meal.quantity > 0 ? '#88807B' : '#D6CFC7' },
                  ]}
                >
                  <View style={{ flexDirection: 'row', alignItems: 'center', flex: 2 }}>
                    <Image
                      source={meal.image}
                      style={{ width: 50, height: 50, marginRight: 10 }}
                    />
                    <View>
                    <Text style={styles.cell}>{meal.name}</Text>
                        <Text style={[styles.subtitle, { color: 'red' }]}>
                          Price: ${meal.price.toFixed(2)}</Text>
                    </View>
                  </View>
                  <Text style={[styles.cell, { flex: 1 }]}>{meal.quantity}</Text>
                  <Text style={[styles.cell, { flex: 1 }]}>
                    ${(meal.price * meal.quantity).toFixed(2)}
                  </Text>
                  <TouchableOpacity onPress={() => decreaseQuantity(meal.id)}>
                    <Text style={styles.buttonText}>-</Text>
                  </TouchableOpacity>
                  <Button
                    title="Decrease"
                    onPress={() => decreaseQuantity(meal.id)}
                    disabled={meal.quantity === 0}
                  />
                </View>
              </TouchableOpacity>
            ))}
          </View>
          <View style={styles.bottomButtons}>
            <TouchableOpacity style={styles.payButton}>
              <Text style={styles.buttonText}>Pay ${totalPrice.toFixed(2)}</Text>
            </TouchableOpacity>
            <TouchableOpacity style={styles.clearButton} onPress={clearSelection}>
              <Text style={styles.buttonText}>Clear Selection</Text>
            </TouchableOpacity>
          </View>
        </View>
      </ScrollView>
    </ImageBackground>
  );
};

const styles = StyleSheet.create({
  background: {
    flex: 1,
    resizeMode: 'cover',
    justifyContent: 'center',
  },
  scrollContainer: {
    flexGrow: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    padding: 1,
    width: '90%',
  },
  
  title: {
    fontSize: 30,
    fontWeight: 'bold',
    marginBottom: 20,
    color: 'black',
  },
  tableWrapper: {
    borderRadius: 10,
    overflow: 'hidden',
    marginBottom: 20,
  },

  table: {
    borderWidth: 2,
    borderColor: '#ccc',
    width: '100%',
    backgroundColor: 'lightbrown',
  },
 
  row: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    paddingHorizontal: 8,
    paddingVertical: 8,
    borderBottomWidth: 1,
    backgroundColor: 'lightbrown',
  },
  cell: {
    flex: 1,
    textAlign: 'center',
  },
  header: {
    flex: 2,
    textAlign: 'center',
    fontWeight: 'bold',
  },
  subtitle: {
    fontSize: 12,
    color: 'gray',
  },
  bottomButtons: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginTop: 20,
    marginBottom: 20,
  },
  payButton: {
    backgroundColor: '#4CAF50',
    padding: 15,
    borderRadius: 5,
    width: '48%',
  },
  clearButton: {
    backgroundColor: '#FFC107',
    padding: 15,
    borderRadius: 5,
    width: '48%',
  },
  buttonText: {
    textAlign: 'center',
    color: 'white',
    fontWeight: 'bold',
    fontSize: 16,
  },
});

export default App;
