package com.bsit2f.myreceiver;

import javax.jms.Connection;
import javax.jms.ConnectionFactory;
import javax.jms.Destination;
import javax.jms.JMSException;
import javax.jms.Message;
import javax.jms.MessageConsumer;
import javax.jms.Session;
import javax.jms.TextMessage;
import org.apache.activemq.ActiveMQConnection;
import org.apache.activemq.ActiveMQConnectionFactory;

public class MyReceiver {
    public static void main(String[] args) throws JMSException {
        /* 1. Getting JMS connection from the JMS server and starting it. */
        ConnectionFactory connectionFactoryName = new ActiveMQConnectionFactory(ActiveMQConnection.DEFAULT_BROKER_URL);
        Connection connectionName = connectionFactoryName.createConnection();
        connectionName.start();
        
        /* 2. Creating a non transactional session to send/receive JMS message. */
        Session sessionName = connectionName.createSession(false, Session.AUTO_ACKNOWLEDGE);
        
        /* 3. The queue will be created automatically on the server. */
        Destination destinationName = sessionName.createQueue("finalproj");
        
        /* 4. MessageConsumer is used for receiving (consuming) messages. */
        MessageConsumer receiver = sessionName.createConsumer(destinationName);
        
        /* 5. This is to receive the message. */
        Message messageContainer = receiver.receive();
        if (messageContainer instanceof TextMessage) {
            TextMessage textMessage = (TextMessage) messageContainer;
            System.out.println("Received message: '" + textMessage.getText() + "'");
        }
        
        /* 6. Closing JMS connection from the JMS server. */
        connectionName.close();
    }
}