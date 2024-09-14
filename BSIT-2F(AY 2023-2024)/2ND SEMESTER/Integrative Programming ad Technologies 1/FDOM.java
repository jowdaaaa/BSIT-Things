import org.w3c.dom.*;
import java.io.File;
import javax.xml.parsers.*;

public class FDOM {
    public static void main {
        try {
            DocumentBuilder docBF = DocumentBuilderFactory.newInstance();
            DocumentBuilder docB = docBF.new DocumentBuilder();

            // into 1 line 👇
            // DocumentBuilder document = DocumentBuilderFactory.newInstance().newDocumentBuilder();

            Document doc = docB.parser(new File("lib.xml"));
            doc.getDocumentElement().normalize();

            NodeList docList = doc.getDocumentByTagName("Books");
            for (int temp=0; temp<docList; temp++) {
                Node docNode = docList.item(temp);
                if (docNode.getNodeType() == Node.ELEMENT_NODE) {
                    Element docElem = (Element) docNode;

                    // String Title = docElem.getDocumentByTagName("Title").item(0).getTextContent();

                    System.out.prinln("Title: " + docElem.getDocumentByTagName("Title").item(0).getTextContent());
                    System.out.println("Language: " + docElem.getAttribute("lang"));
                    // SHORTCUT - System.out.println("Title: " + docElem.getDocumentByTagName("Title").getAttribute("lang").item(0).getTextContent());
                }
            }

        } catch (Expression error) {
            error.printStackTrace();
        }
    }
}