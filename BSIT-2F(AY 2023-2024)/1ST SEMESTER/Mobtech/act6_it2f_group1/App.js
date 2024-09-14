import React from 'react';
import MapView, {Marker, Circle } from 'react-native-maps';
import { StyleSheet, View, Text } from 'react-native';
import * as Location from 'expo-location';

export default function App() {
  const [vinasAddress] = React.useState({ latitude: 13.41886, longitude: 123.38532 });
  const [peraAddress] = React.useState({ latitude: 13.619769, longitude: 123.237908 });
  const [baraquielAddress] = React.useState({ latitude: 13.29640, longitude: 123.49704 });
  const [dulfoAddress] = React.useState({ latitude: 13.47240, longitude: 123.27816 });
  const [nazariaAddress] = React.useState({ latitude: 13.44095, longitude: 123.50460 });
  const [schoolAddress] = React.useState({ latitude: 13.40618, longitude: 123.37528 });
  
  const [pin, setPin] = React.useState({
    latitude: 13.406,
    longitude: 123.3753,
  });

  React.useEffect(() => {
    (async () => {
      
      let { status } = await Location.requestForegroundPermissionsAsync();      
      if (status !== 'granted') {
        console.log('Permission to access location was denied');
        return;
      }

      let location = await Location.getCurrentPositionAsync({});
      console.log(location);

      setPin({
        latitude: location.coords.latitude,
        longitude: location.coords.longitude,
      });
    })();
  }, []); 

  return (
    <View style={styles.container}>

      {/* CURRENT LOCATION */}
      <MapView 
        style={styles.map} 
        initialRegion={{
          latitude: 13.406,
          longitude: 123.3753,
          latitudeDelta: 0.005,
          longitudeDelta: 0.0005,
        }}
        showsUserLocation={true}
        onUserLocationChange={(e) => {
          console.log("onUserLocationChange", e.nativeEvent.coordinate);
          
          setPin({
            latitude: e.nativeEvent.coordinate.latitude,
            longitude: e.nativeEvent.coordinate.longitude,
          });
        }}
      >
        <Marker
          coordinate = {pin}
          title="Current Location"
          pinColor="gold"
          draggable={true}
          onDragStart={(e) =>{
            console.log("Drag Start", e.nativeEvent.coordinate);
          }}
          onDragEnd={(e) =>{
            console.log("Drag End", e.nativeEvent.coordinate);

            setPin({
              latitude: e.nativeEvent.coordinate.latitude,
              longitude: e.nativeEvent.coordinate.longitude,
            });
          }}
          ></Marker>

          <Circle
            center={pin }
            radius={100}
          />
      
      {/* Display home address marker */}
      <Marker
          coordinate={{
            latitude: vinasAddress.latitude,
            longitude: vinasAddress.longitude,
          }}
          title="Viñas' Address"
          pinColor="green"
        />
        <Marker
          coordinate={{
            latitude: peraAddress.latitude,
            longitude: peraAddress.longitude,
          }}
          title="Pera's Address"
          pinColor="green"
        />
        <Marker
          coordinate={{
            latitude: baraquielAddress.latitude,
            longitude: baraquielAddress.longitude,
          }}
          title="Baraquiel's Address"
          pinColor="green"
        />
        <Marker
          coordinate={{
            latitude: dulfoAddress.latitude,
            longitude: dulfoAddress.longitude,
          }}
          title="Dulfo's Address"
          pinColor="green"
        />
        <Marker
          coordinate={{
            latitude: nazariaAddress.latitude,
            longitude: nazariaAddress.longitude,
          }}
          title="Nazaria's Address"
          pinColor="green"
        />


        {/* Display school address marker */}
        <Marker
          coordinate={{
            latitude: schoolAddress.latitude,
            longitude: schoolAddress.longitude,
          }}
          title="School Address"
          pinColor="red"
        />
      </MapView>

      <View style={styles.addressContainer}>
        <Text style={styles.cl}>Current Location :</Text>
        <Text style={styles.loc}>{`(${pin.latitude}, ${pin.longitude})`}</Text>

        <Text style={styles.sa}>School Address :</Text>
        <Text style={styles.loc}>{`(${schoolAddress.latitude}, ${schoolAddress.longitude})`}</Text>

        <Text style={{fontWeight: 'bold', fontSize: 18, color: 'green',}}>Home Address :</Text>
        <Text style={styles.ha}>- Baraquiel's Address :</Text>
        <Text style={styles.loc}>{`(${baraquielAddress.latitude}, ${baraquielAddress.longitude})`}</Text>
        <Text style={styles.ha}>- Dulfo's Address :</Text>
        <Text style={styles.loc}>{`(${dulfoAddress.latitude}, ${dulfoAddress.longitude})`}</Text>
        <Text style={styles.ha}>- Nazaria's Address :</Text>
        <Text style={styles.loc}>{`(${nazariaAddress.latitude}, ${nazariaAddress.longitude})`}</Text>
        <Text style={styles.ha}>- Pera's Address :</Text>
        <Text style={styles.loc}>{`(${peraAddress.latitude}, ${peraAddress.longitude})`}</Text>
        <Text style={styles.ha}>- Viñas' Address :</Text>
        <Text style={styles.loc}>{`(${vinasAddress.latitude}, ${vinasAddress.longitude})`}</Text>
      </View>

    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  map: {
    flex: 1,
  },
  addressContainer: {
    padding: 16,
    backgroundColor: '#F3F3F3',
  },
  buttonContainer: {
    marginTop: 25,
    marginBottom: 25,
    alignItems: 'center',
  },
  cl: {
    fontWeight: 'bold',
    fontSize: 18,
    color: 'blue',
  },
  ha: {
    fontSize: 15,
    color: 'green',
  },
  sa: {
    fontWeight: 'bold',
    fontSize: 18,
    color: 'red',
  },
  loc: {
    marginLeft: 20,
  },
});